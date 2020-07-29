# HiddenMarket
HiddenMarket este o aplicație web, dezvoltată pe framework-ul de PHP Laravel, având pe frontend ca framework Bootstrap 4, iar ca și bază de date folosește MySQL. Aplicația reprezintă un magazin online destinat internetului ascuns (deep-web). HiddenMarket prezintă niște protecții și sisteme suplimentare specifice, cele mai importante fiind sistemul de tranzacționare cu cripto-curențe și utilizarea PGP key-ului ca factor de securitate pentru encriptarea tuturor mesajelor trimise pe platformă. De asemenea fiecare utilizator după autentificare va trebui să își noteze un Mnemonic Key pentru aș putea recupera ulterior datele (ex. parolă / schimbare date, etc...).

HiddenMarket este împărțit în mai multe module **principale** și anume:
- **modulul de Magazin** - creat pentru a putea posta produsele spre vânzare, ca utilizatorii să le poată cumpăra.
- **modulul de Utilizatori** - creat pentru a modulariza permisiunile utilizatorilor (**Moderatori** / **Administratori** / **Utilizatori**), fiecare **Administrator** poate seta din cadrul panoului de Admin statutul unui utilizator pentru a fi eligibil pentru gradul de **Administrator** / **Moderator** și de asemenea în acest modul intră și sistemul de autentificare, securizare și  prin care utilizatorul își poate seta Mnenonic Key-ul și PGP Key-ul pentru a decoda eventualele mesaje primite de la utilizatori.
- **modulul de Vânzători** - creat pentru a costumiza profilul de vânzător al unui utilizator pe site, fiecare utilizator poate deveni un **Vânzător (Vendor)** dacă și numai dacă are un produs expus către vânzare, pe pagina principală fiind un top al acestora.
- **modulul de Administrare** - creat pentru a putea manageria utilizatorii, permisiunile acestora și pentru a rezolva diverse acțiuni inițiate de utilizatorii platformei.
- **module Auxiliare:**
    - notificări - în momentul în care este făcută o actualizare legată despre un utilizatori, acesta va primi o notificare.
    - listă de dorințe (wishlist) - fiecare magazin modern prezintă un wishlist, așa că am integrat și noi un asemenea sistem.
    - 2fa (autentificare în 2 pași) - bazat pe PGP Key-ul unui utilizator, dacă acesta nu este setat, acesta nu își poate activa modulul.

[![Build Status](https://travis-ci.com/iRaduS/hiddenmarket.svg?token=456dFzDcpted9spxfZDs&branch=master)](https://travis-ci.com/iRaduS/hiddenmarket)

> ### Inspirație
>
> "Oricine nu a greșit niciodată nu a încercat niciodată ceva nou."

**Proiectul a pornit de la ideea că putem să ne depășim capacitățile și să învățăm cum să folosim o tehnologie într-un mod optim.**

### Tehnologiile folosite
---
Această aplicație a fost construită pe:
- **[Laravel PHP Framework](https://laravel.com)** - folosit cu fișierele PHP în acest proiect, arhitectura adoptată fiind **MVC (Model - View - Controller)**
- **[Bootstrap 4.x CSS Framework](https://getbootstrap.com)** - folosit cu fișierele SCSS & CSS în acest proiect

De asemenea, avem și câteva librării / unelte în sprijinul nostru:
- **[Travis CI](https://travis-ci.com)** - folosit pentru automatizare teste
- **[Laravel MIX](https://laravel-mix.com/)** - Laravel Mix este un layer pentru webpack / compilare asset-uri

### De ce am ales aceste tehnologii?
---
- **Laravel** este un framework de PHP (backend) care permite oricărui dezvoltator web să construiască o aplicație complexă, riguroasă, oferind unelete pentru optimizare, când aceasta este lansată în producție.
- **Bootstrap** este framework-ul de CSS (frontend) pe care l-am folosit pentru a crea interfața (UI).

**ATENȚIE! Platforma nu folosește JAVASCRIPT, întrucât pe deep-web nu este permisă utilizarea JAVASCRIPT-ului.**
