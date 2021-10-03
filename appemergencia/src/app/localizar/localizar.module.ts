import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { LocalizarPageRoutingModule } from './localizar-routing.module';

import { LocalizarPage } from './localizar.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    LocalizarPageRoutingModule
  ],
  declarations: [LocalizarPage]
})
export class LocalizarPageModule {}
