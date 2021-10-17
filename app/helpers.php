<?php

function setActive ($routeName){
    return request()->routeIs($routeName) ? 'active-link' : "";
}

function contactPage (){
    return request()->routeIs('contact') ? 'contact-navbar' : "bg-white";
}