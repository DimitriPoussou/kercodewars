<?php
class KercodeWar{
    public static function weekday($number, $lang='en'){
        if ($lang==='fr'){
            if ($number === 1) {
                return 'Dimanche';
            }
            if ($number === 2) {
                return 'Lundi';
            }
            if ($number === 3) {
                return 'Mardi';
            }
            if ($number === 4) {
                return 'Mercredi';
            }
            if ($number === 5) {
                return 'Jeudi';
            }
            if ($number === 6) {
                return 'Vendredi';
            }
            if ($number === 7) {
                return 'Samedi';
            } else {
                return 'Faux, veuillez entrer un chiffre entre 1 et 7';
            }
        }
        elseif ($lang==='et'){
            if ($number === 1) {
                return 'pühapäev';
            }
            if ($number === 2) {
                return 'esmaspäev';
            }
            if ($number === 3) {
                return 'teisipäev';
            }
            if ($number === 4) {
                return 'kolmapäev';
            }
            if ($number === 5) {
                return 'neljapäev';
            }
            if ($number === 6) {
                return 'reede';
            }
            if ($number === 7) {
                return 'laupäev';
            } else {
                return 'vale, sisestage number vahemikus 1 kuni 7';
            }
        }
        elseif ($lang==='ru'){
            if ($number === 1) {
                return 'воскресенье';
            }
            if ($number === 2) {
                return 'понедельник';
            }
            if ($number === 3) {
                return 'вторник';
            }
            if ($number === 4) {
                return 'среда';
            }
            if ($number === 5) {
                return 'четверг';
            }
            if ($number === 6) {
                return 'пятница';
            }
            if ($number === 7) {
                return 'суббота';
            } else {
                return 'Неверно, введите число от 1 до 7';
            }
        }
        else {
            if ($number === 1) {
                return 'Sunday';
            }
            if ($number === 2) {
                return 'Monday';
            }
            if ($number === 3) {
                return 'Tuesday';
            }
            if ($number === 4) {
                return 'Wednesday';
            }
            if ($number === 5) {
                return 'Thursday';
            }
            if ($number === 6) {
                return 'Friday';
            }
            if ($number === 7) {
                return 'Saturday';
            } else {
                return 'Wrong,please enter a number between 1 à 7';
            }
        }
    }
    public static function isweekend($number){
        if ($number===1 or $number===7) {
            return true;
        }
        else {
            return false;
        }
    }
   }
