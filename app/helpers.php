<?php

function setActive($routeName){
    return request()->routeIs($routeName) ? 'active-link' : '';
}

function contactPage(){
    return request()->routeIs('contact') ? 'contact-navbar' : 'bg-white';
}

function langButton(){
    return request()->routeIs('contact') ? 'lang-btn2' : 'lang-btn1';
}