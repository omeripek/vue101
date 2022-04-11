<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test</title>
  <script src="https://unpkg.com/vue@3"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div id="computed">
        <button v-on:click="no++">Add</button>
        <button v-on:click="no2++">Render Test</button>
        <p>No : {{no}} | {{no2}}</p>
        <p>{{ result() }}</p>
</div>
<script>
  Vue.createApp({
      data: {
          no: 0,
          no2: 0
      },
      methods: {
          result: function () {
              console.log("render test...")
              return this.sayi > 3 ? "3++" : "3--";
          }
      }
  }).mount('#computed')
</script>

</body>
</html>
