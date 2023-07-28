<template>
  <section>
    <h1>Abount Page</h1>
    <input type="file" @change="uploadImage" />
  </section>
</template>

<script setup>
import { storage } from "@/firebase.js";
import {
  uploadBytesResumable,
  getDownloadURL,
  ref as storageReference,
} from "firebase/storage";
import { ref } from "vue";

const uploadImageFile = ref(null);
const downloadImageFile = ref(null);

async function uploadImage(event) {
  console.log(event.target.files[0]);
  let fileImage = event.target.files[0];
  const storageRef = storageReference(storage, `images/${fileImage.name}`);
  const uploadFile = uploadBytesResumable(storageRef, fileImage);
  uploadFile.on(
    "state_changed",
    (snapshot) => {
      const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
      console.log(`Upload is ${progress}% done`);
    },
    (error) => {
      console.log(error);
    },
    async () => {
      uploadImageFile.value = uploadFile;
      console.log("Upload complete");
      const url = await getDownloadURL(storageRef);
      downloadImageFile.value = url;
      console.log(downloadImageFile.value);
    }
  );
}
</script>