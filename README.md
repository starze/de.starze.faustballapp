# FaustballApp

FaustballApp is a Cordova based Android-App. It is linking to all relevant sites of faustball-schwaben. I really appreciate each suggestion for improvement. Pull requests are explicitly whished.

## Build and run

### Prepare

1. install android studio
2. set environment in ```~/.bash_profile``` or ```~/.bashrc```
   ```
    export ANDROID_SDK_ROOT=~/Android/Sdk
    export JAVA_HOME=/opt/android-studio/jre/
    export PATH=${PATH}:~/Android/Sdk/platform-tools:~/Android/Sdk/tools
    ```
3. install node.js and npm
4. install dependencies
   ```bash
   npm i
   ```
5. install cordova
    ```bash
    npm i -g cordova
    ```
6. Update android platform and plugins (optional)
    ```bash
    npm run update
    ```
7. Prepare .env file for release builds (optional)
   ```bash
   cp .env.sample .env
   vi .env
   ```

### Build

1. Build debug and release apk
    ```bash
    npm run build
    ```

### Run

1. Run on connected device (or in simulation)
    ```bash
    npm start
    ```

### Deploy

1. build release apk
   ```bash
   npm run build:release
   ```
2. Upload renamed FaustballApp.apk to Google App Store



## Beschreibung im Android-App-Store

Die offizielle APP von faustball-schwaben.
Der schnellste Weg zu allen Faustball­Informationen!
Mit dieser APP kommst Du auf alle relevanten Faustball­seiten und kannst Dir die aktuellsten Informationen direkt von der Quelle holen:
 * faustball-schwaben – die Seite für alle schwäbischen Faustballer
 * faustball-ergebnisse – die Ergebnisseite aller deutschen Faustballer
 * DFBL – Deutsche Faustball­Liga – alle Infos vom deutschen Faustball
 * RGS – Regionalgruppe SÜD – die süddeutschen Meisterschaften / Termine und Infos
 * Vereinsseite – hier sind sämtliche schwäbischen Faustballvereine hinterlegt – mal schauen, was die Konkurrenz macht !? 

Die Faustball­­App vereint alle Seiten, die für Dich relevant werden können. So verpasst Du keine Veranstaltung mehr, weißt immer über die Ergebnisse Bescheid und erfährst aus erster Hand, wer wo was macht im schwäbischen und deutschen Faustball. Spieltage und Turniere sind auf den jeweiligen Seiten immer parat und man kann sich super auf die Saison vorbereiten und planen.
Sollte Dein Verein, Deine Homepage noch nicht erreichbar sein, melde Dich per Mail unter oeffentlichkeitsarbeit@stb-­faustball.de – dann fügen wir Deinen Verein mit hinzu.
V I E L    S P A ß !


## Further Reading

<a href="http://cordova.apache.org">Apache Cordova</a> is a project of <a href="http://apache.org">The Apache Software Foundation (ASF)</a>.


## License

The MIT License (MIT) Copyright (c) 2014 Daniel Starzmann.

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
