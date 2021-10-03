import { Component, OnInit } from '@angular/core';

import { AlertController, NavController, Platform } from '@ionic/angular';
import { SplashScreen } from '@ionic-native/splash-screen/ngx';
import { StatusBar } from '@ionic-native/status-bar/ngx';

@Component({
  selector: 'app-root',
  templateUrl: 'app.component.html',
  styleUrls: ['app.component.scss']
})
export class AppComponent implements OnInit {
  nombre: string;
  email: string;
  public selectedIndex = 0;
  public appPages = [
    {
      title: 'Emergencia',
      url: '/emergencia',
      icon: 'medkit'
    },
    {
      title: 'Pefil',
      url: '/perfil',
      icon: 'person'
    }
  ];

  constructor(
    private platform: Platform,
    private splashScreen: SplashScreen,
    private statusBar: StatusBar,
    private nav: NavController,
    private alert: AlertController
  ) {
    this.initializeApp();
  }

  initializeApp() {
    this.platform.ready().then(() => {
      this.statusBar.styleDefault();
      this.splashScreen.hide();
    });
  }

  ngOnInit() {
    const path = window.location.pathname.split('folder/')[1];
    if (path !== undefined) {
      this.selectedIndex = this.appPages.findIndex(page => page.title.toLowerCase() === path.toLowerCase());
    }
    if (localStorage.getItem('id')) {
      this.nav.navigateRoot('/emergencia');
    } else {
      this.nav.navigateRoot('/login');
    }
  }

  async cerrarS() {
    const alert = await this.alert.create({
      cssClass: 'my-custom-class',
      header: 'Confirmar',
      message: '¿<strong>Cerrar Sesión</strong>?',
      buttons: [
        {
          text: 'Si',
          handler: () => {
            localStorage.clear();
            this.nav.navigateRoot('/login');
          }
        }, {
          text: 'No',
          role: 'cancel',
          cssClass: 'secondary',
        }
      ]
    });
    await alert.present();
  }
}
