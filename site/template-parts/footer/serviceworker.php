<?php
/**
 * ServiceWorker
 */
?>

<script>
  if('serviceWorker' in navigator) {
    navigator.serviceWorker
             .register('/Kingsley_Distribution/site/sw_local.js')
             .then(function(reg) {
               console.log('Service Worker Registered', reg);
             }) .catch(function(err) {
               console.log('Service Worker failed to register', err);
             })
  }
</script>
