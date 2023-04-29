// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here, other Firebase libraries
// are not available in the service worker.
importScripts('https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.10.0/firebase-messaging.js');

// Initialize the Firebase app in the service worker by passing in
// your app's Firebase config object.
// https://firebase.google.com/docs/web/setup#config-object
firebase.initializeApp({
    apiKey: "AIzaSyC6tQGYBrObvjdA5lOsLOSHLNUnWH38oNQ",
    authDomain: "mkdashboard-54653.firebaseapp.com",
    projectId: "mkdashboard-54653",
    storageBucket: "mkdashboard-54653.appspot.com",
    messagingSenderId: "530529735115",
    appId: "1:530529735115:web:39de9fe25ae54453ee664e",
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();