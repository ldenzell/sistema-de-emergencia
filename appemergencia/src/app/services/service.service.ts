import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, throwError, of } from 'rxjs';
import { tap, catchError } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class ServiceService {

  // Apuntar al propio dominio local
  path = 'http://sistema.test/api';

  httpOptions: { headers: HttpHeaders; };

  constructor(private http: HttpClient) { }

  loginClient(email, password): Observable<any> {
    var datoaEnviar = {
      'email': email,
      'password': password
    };
    return this.http.post(this.path + '/login', datoaEnviar, this.httpOptions)
      .pipe(
        tap((data: any) => {
          return of(data);
        }),
        catchError((err) => {
          return throwError(err);
        })
      );
  }

  profile(id): Observable<any> {
    var datoaEnviar = {
      'paciente_id': id
    };
    return this.http.post(this.path + '/perfil', datoaEnviar, this.httpOptions)
      .pipe(
        tap((data: any) => {
          return of(data);
        }),
        catchError((err) => {
          return throwError(err);
        })
      );
  }

  location(lat, lng, id): Observable<any> {
    var datoaEnviar = {
      'latitude': lat,
      'longitude': lng,
      'paciente_id': id,
    };
    return this.http.post(this.path + '/emergencia', datoaEnviar, this.httpOptions)
      .pipe(
        tap((data: any) => {
          return of(data);
        }),
        catchError((err) => {
          return throwError(err);
        })
      );
  }
}
