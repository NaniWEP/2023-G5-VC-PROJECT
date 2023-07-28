// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCoOQhPBinePRbR6UmfkBtv74nzWNHZSH8",
  authDomain: "vc-5-392003.firebaseapp.com",
  projectId: "vc-5-392003",
  storageBucket: "vc-5-392003.appspot.com",
  messagingSenderId: "110348301474",
  appId: "1:110348301474:web:a4892de6d12cb8e74453fb",
  measurementId: "G-2TYGGWX1V9"
};

// Initialize Firebase
// const app = initializeApp(firebaseConfig);
// const analytics = getAnalytics(app);
const app = initializeApp(firebaseConfig);
getAnalytics(app);
import {getStorage} from "firebase/storage";
const storage = getStorage(app) 
export {storage}