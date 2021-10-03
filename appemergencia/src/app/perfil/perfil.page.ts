import { Component, OnInit } from '@angular/core';
import { ServiceService } from '../services/service.service';
import { LoadingController } from '@ionic/angular';

@Component({
  selector: 'app-perfil',
  templateUrl: './perfil.page.html',
  styleUrls: ['./perfil.page.scss'],
})
export class PerfilPage implements OnInit {

  paciente: any = [];

  constructor(private service: ServiceService,
              public loading: LoadingController
  ) {
    this.load();
  }

  ngOnInit() {
  }

  async load() {
    const loading = await this.loading.create({
      message: 'Recuperando....',
    });
    await loading.present().then(() => {
      this.service.profile(localStorage.getItem('id')).subscribe(async data => {
        this.paciente = data.data;
        await loading.dismiss();
        console.log(this.paciente);
      }, err => {
        console.log(err);
        loading.dismiss();
      }
      );
    });
  }

}
