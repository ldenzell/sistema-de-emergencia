import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { NavController, LoadingController, ToastController, MenuController } from '@ionic/angular';
import { ServiceService } from '../services/service.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {
  form: FormGroup;
  success: any;

  constructor(public formBuilder: FormBuilder,
              public nav: NavController,
              private service: ServiceService,
              public loading: LoadingController,
              public toast: ToastController,
              public menuCtrl: MenuController
  ) {
    this.menuCtrl.enable(false);
  }

  ngOnInit() {
    this.form = this.formBuilder.group({
      email: ['', Validators.compose([Validators.required, Validators.email])],
      password: ['', Validators.compose([Validators.required])],
    });
  }

  async login() {
    const loading = await this.loading.create({
      message: 'Ingresando....',
    });
    await loading.present().then(() => {
      this.service.loginClient(this.form.value.email, this.form.value.password).subscribe(
        async data => {
          this.success = data.data;
          console.log(this.success);
          localStorage.setItem('id', this.success.id);
          this.sms('Bienvenido ' + this.success.nombres);
          this.nav.navigateRoot(['/emergencia']);
          await loading.dismiss();
        }, err => {
          console.log(err);
          this.sms(err.error.error);
          loading.dismiss();
        }
      );
    });
  }
  async sms(sms) {
    const toast = await this.toast.create({
      message: sms,
      duration: 5000,
    });
    toast.present();
  }

}
