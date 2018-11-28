import { RouterModule, Routes } from '@angular/router';//importe esto para las rutas

import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { CabeceraComponent } from './cabecera/cabecera.component';
import { FooterComponent } from './footer/footer.component';
import { EquipoComponent } from './equipo/equipo.component';
import { HistoriaComponent } from './historia/historia.component';
import { TrofeosComponent } from './trofeos/trofeos.component';
import { EstadioComponent } from './estadio/estadio.component';
import { JugadorComponent } from './jugador/jugador.component';

const routes: Routes = [//es es para las rutas, el cual es una constante que se llama rutes y es de tipo routes
  { path: 'equipo', component: EquipoComponent },
  { path: 'historia', component: HistoriaComponent },
  { path: 'trofeos', component: TrofeosComponent },
  { path: 'estadio', component: EstadioComponent },
  { path: 'jugador', component: JugadorComponent },
  { path: '**', redirectTo: 'equipo', pathMatch: 'full' }, //cuando la ruta no tenga coincidencia
  { path: '', redirectTo: 'equipo', pathMatch: 'full' }// cuando la rura este vacía
 
];

@NgModule({
  declarations: [
    AppComponent,
    CabeceraComponent,
    FooterComponent,
    EquipoComponent,
    HistoriaComponent,
    TrofeosComponent,
    EstadioComponent,
    JugadorComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(routes)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
