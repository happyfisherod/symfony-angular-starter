import {APP_BASE_HREF} from '@angular/common';
import {async, ComponentFixture, TestBed} from '@angular/core/testing';
import {AppModule} from '../../app.module';
import {SignupModule} from '../signup.module';
import {IndexComponent} from './index.component';

describe('IndexComponent', () => {
    let component: IndexComponent;
    let fixture: ComponentFixture<IndexComponent>;

    beforeEach(async(() => {
        TestBed.configureTestingModule({
                   imports: [
                       AppModule,
                       SignupModule,
                   ],
                   providers: [
                       {provide: APP_BASE_HREF, useValue: '/'},
                   ],
               })
               .compileComponents();
    }));

    beforeEach(() => {
        fixture = TestBed.createComponent(IndexComponent);
        component = fixture.componentInstance;
        fixture.detectChanges();
    });

    it('should create', () => {
        expect(component).toBeTruthy();
    });
});
