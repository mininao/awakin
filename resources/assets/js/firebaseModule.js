import Firebase from 'firebase';

let db = Firebase.initializeApp({
    apiKey: "AIzaSyCf0N-I_sffDX3uJaNfVj0Or1qhTDzw6Cw",
    authDomain: "awakin-162908.firebaseapp.com",
    databaseURL: "https://awakin-162908.firebaseio.com",
    projectId: "awakin-162908",
    storageBucket: "awakin-162908.appspot.com",
    messagingSenderId: "463458707052"
}).database();
var orderRef = db;
export default {
    orderRef:orderRef
}
