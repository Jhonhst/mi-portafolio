import { Component, OnInit } from '@angular/core';
import * as $ from 'jquery';

@Component({
  selector: 'app-equipo',
  templateUrl: './equipo.component.html',
  styleUrls: ['./equipo.component.css']
})
export class EquipoComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

}
$(function(){

  $( "#ver" ).click(function(){
    alert('ver');
  });

   
});
