import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { LocalizarPage } from './localizar.page';

describe('LocalizarPage', () => {
  let component: LocalizarPage;
  let fixture: ComponentFixture<LocalizarPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ LocalizarPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(LocalizarPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
