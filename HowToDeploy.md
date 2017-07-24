# FaustballApp

## Deploy FaustballApp

1. clone or fork de.starze.faustballapp
1. install node.js and npm
1. install cordova: `npm install -g cordova`
1. install android platform: `cordova platform add android`
1. build app: `cordova build`
1. run app on device: `cordova run`
1. build release apk: `cordova build android --release -- --keystore="c:\starzes-release-key.keystore" --alias=starze`
1. Copy file "FaustballApp-release.apk" into directory release\<version>\
1. Upload renamed FaustballApp.apk to Google App Store
1. push changes to github

