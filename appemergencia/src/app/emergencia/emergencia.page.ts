import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { MenuController } from '@ionic/angular';

@Component({
  selector: 'app-emergencia',
  templateUrl: './emergencia.page.html',
  styleUrls: ['./emergencia.page.scss'],
})
export class EmergenciaPage implements OnInit {

  constructor(public nav: Router,
              public menuCtrl: MenuController
  ) {
    this.menuCtrl.enable(true);
  }

  ngOnInit() {
  }

  async localizar() {
    this.nav.navigate(['/localizar']);
  }

}
