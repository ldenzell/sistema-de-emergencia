import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { LocalizarPage } from './localizar.page';

const routes: Routes = [
  {
    path: '',
    component: LocalizarPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class LocalizarPageRoutingModule {}
