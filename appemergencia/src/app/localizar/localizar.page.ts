import { Component, ElementRef, OnInit, ViewChild } from '@angular/core';
import {
  GoogleMaps,
  GoogleMap,
  GoogleMapsEvent,
  Marker,
  GoogleMapsAnimation,
  MyLocation,
  Environment,
  MarkerOptions,
  LatLng
} from '@ionic-native/google-maps';
import { LoadingController, Platform, ToastController, NavController, AlertController } from '@ionic/angular';
import { ServiceService } from '../services/service.service';

import { Geolocation } from '@ionic-native/geolocation/ngx';
import { NativeGeocoder, NativeGeocoderResult, NativeGeocoderOptions } from '@ionic-native/native-geocoder/ngx';

declare var google;
@Component({
  selector: 'app-localizar',
  templateUrl: './localizar.page.html',
  styleUrls: ['./localizar.page.scss'],
})
export class LocalizarPage implements OnInit {

  //map: GoogleMap;
  loading: any;
  markers: any;
 // lat = '';
  //lng = '';
  success: any;


  //Variables google maps
  @ViewChild('map',  {static: false}) mapElement: ElementRef;
  map: any;
  address:string;
  lat: string;
  lng: string;  
  LATVEN: string;
  LONVEN: string;
  autocomplete: { input: string; };
  autocompleteItems: any[];
  location: any;
  placeid: any;
  GoogleAutocomplete: any;
  pos:any;
  latCLIENTE:any;
  lonCLIENTE:any;
  swCLIENTE=false;

  constructor(public loadingCtrl: LoadingController,
              public toastCtrl: ToastController,
              public platform: Platform,
              private service: ServiceService,
              public nav: NavController,
              public alertC: AlertController,
              private geolocation: Geolocation,
    private nativeGeocoder: NativeGeocoder
) { }

  async ngOnInit() {
/*     await this.platform.ready();
    await this.loadMap();
    this.localizar(); */
    this.loadMap();
  }
  

  /* loadMap() {
    Environment.setEnv({
      'API_KEY_FOR_BROWSER_RELEASE': 'AIzaSyBUf2cDjX6QTyLvUYGe5IQs748Sn_UzBKs',
      'API_KEY_FOR_BROWSER_DEBUG': 'AIzaSyBUf2cDjX6QTyLvUYGe5IQs748Sn_UzBKs'
    });
    this.map = GoogleMaps.create('map_canvas', {
      camera: {
        target: {
          lat: -17.410784,
          lng: -66.151423
        },
        zoom: 18,
        tilt: 30
      }
    });
  }

  addMarker(options){
    const markerOptions: MarkerOptions = {
      position: new LatLng(options.position.lat, options.position.lng),
      title: options.title,
    };
    this.map.addMarker(markerOptions);
  }

  async localizar() {
    this.map.clear();
    this.loading = await this.loadingCtrl.create({
      message: 'Espera por favor...'
    });
    await this.loading.present();

    this.map
      .getMyLocation()
      .then((location: MyLocation) => {
        this.loading.dismiss();
        this.lat = location.latLng.lat.toString();
        this.lng = location.latLng.lng.toString();

        console.log('lat ' + this.lat);
        console.log('lng ' + this.lng);

        this.map.animateCamera({
          target: location.latLng,
          zoom: 17,
          tilt: 30
        });

        let marker: Marker = this.map.addMarkerSync({
          position: location.latLng,
          animation: GoogleMapsAnimation.BOUNCE,
        });

        marker.showInfoWindow();

        marker.on(GoogleMapsEvent.MARKER_CLICK).subscribe(() => {
          this.showToast('Estas Aquí =)');
        });
      })
      .catch(error => {
        this.loading.dismiss();
        this.showToast(error.error_message);
      });
  }

  async showToast(mensaje) {
    let toast = await this.toastCtrl.create({
      message: mensaje,
      duration: 4000,
      position: 'bottom'
    });
    toast.present();
  } */

  addMarker(location) {
    return new google.maps.Marker({
      position: location,
    });
  }

  loadMap() {
    
    //OBTENEMOS LAS COORDENADAS DESDE EL TELEFONO.
    this.geolocation.getCurrentPosition().then((resp) => {
      let latLng = new google.maps.LatLng(resp.coords.latitude, resp.coords.longitude);
      let mapOptions = {
        center: latLng,
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        clickableIcons: false
      } 
      
      
      //CUANDO TENEMOS LAS COORDENADAS SIMPLEMENTE NECESITAMOS PASAR AL MAPA DE GOOGLE TODOS LOS PARAMETROS.
      this.getAddressFromCoords(resp.coords.latitude, resp.coords.longitude); 
      this.map = new google.maps.Map(this.mapElement.nativeElement, mapOptions); 
      if(this.pos!=null)
        this.pos.setMap(null);
      this.pos=this.addMarker(latLng);
      this.pos.setMap(this.map);
      this.map.addListener('click', (event) => {
        if(event.cancelable){
          event.preventDefault();
        }
        
        console.log('lat',event.latLng.lat(),'long',event.latLng.lng());
        this.pos.setMap(null);
        this.pos=this.addMarker(event.latLng);
        this.pos.setMap(this.map);
        //console.log('accuracy',this.map, this.map.center.lat());
        //this.getAddressFromCoords(this.map.center.lat(), this.map.center.lng())
        this.lat = event.latLng.lat();
        this.lng = event.latLng.lng();
      }); 
    }).catch((error) => {
      console.log('Error getting location', error);
    });
  }

  getAddressFromCoords(lattitude, longitude) {
    console.log("getAddressFromCoords "+lattitude+" "+longitude);
    this.lat = lattitude;
    this.lng = longitude;
    let options: NativeGeocoderOptions = {
      useLocale: true,
      maxResults: 5    
    }; 
    this.nativeGeocoder.reverseGeocode(lattitude, longitude, options)
      .then((result: NativeGeocoderResult[]) => {
        this.address = "";
        let responseAddress = [];
        for (let [key, value] of Object.entries(result[0])) {
          if(value.length>0)
          responseAddress.push(value); 
        }
        responseAddress.reverse();
        for (let value of responseAddress) {
          this.address += value+", ";
        }
        this.address = this.address.slice(0, -2);
      })
      .catch((error: any) =>{ 
        this.address = "Address Not Available!";
      }); 
  } 


  async send() {
    const loading = await this.loadingCtrl.create({
      message: 'Enviando....',
    });
    await loading.present().then(() => {
      this.service.location(this.lat, this.lng, localStorage.getItem('id')).subscribe(
          async data => {
            this.success = data.data;
            console.log(this.success);
            this.alert();
            await loading.dismiss();
          }, err => {
            console.log(err);
            //this.showToast(err.error.data);
            loading.dismiss();
          }
        );
    });
  }

  async alert() {
    const alert = await this.alertC.create({
      subHeader: 'Emergencia registrada Correctamente',
      buttons: [
        {
          text: 'Ok',
          handler: () => {
          this.nav.navigateRoot(['/emergencia']);
          }
        }
      ]
    });
    await alert.present();
  }
}
