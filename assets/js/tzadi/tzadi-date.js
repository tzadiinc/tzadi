/*!
 * Tzadi Date Plugin v1.0
 * Extends TzadiJS Plugin v1.0
 * https://github.com/tzadiinc/tzadi-date
 *
 * Copyright 2013 Bruno da Silva Joao
 * Released under the MIT license
 */

TzadiJS.prototype.date = function( date ){

  var d = new Date(date*1000);

  this.day = d.getDate();

  if( this.day < 10 ) this.day = "0"+this.day;

  this.month = d.getMonth()+1;

  if( this.month < 10 ) this.month = "0"+this.month;

  this.year = d.getFullYear();

  this.shortYear = this.year.toString().substr(2,2);

  this.hour = d.getHours();

  if( this.hour < 10 ) this.hour = "0"+this.hour;

  this.millisecond = d.getMilliseconds();

  if( this.millisecond < 10 ) this.millisecond = "0"+this.millisecond;

  this.minute = d.getMinutes();

  if( this.minute < 10 ) this.minute = "0"+this.minute;

  this.second = d.getSeconds();

  if( this.second < 10 ) this.second = "0"+this.second;

  this.date = this.day+"/"+this.month+"/"+this.year;

  this.shortDate = this.day+"/"+this.month+"/"+this.shortYear;

  this.time = this.hour+":"+this.minute+":"+this.second+":"+this.millisecond;

  this.shortTime = this.hour+":"+this.minute;

  this.dateTime = this.date+" "+this.time;

  this.shortDateTime = this.shortDate+" "+this.shortTime;

};