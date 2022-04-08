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

<div id="mouse" class="m-3">
  <p>number : {{number}}</p>
    <p v-on:mousemove="showMouseCoordinate(10, $event)"> 
        Koordinat : {{x}} - {{y}}
        <span v-on:mousemove.stop style="background:#e1e1e1; padding:10px;">Bind Stop</span>
    </p>
</div>

<script>
  Vue.createApp({
    data() {
      return {
         number: 0,
        x: 0,
        y: 0
      }
    },
    methods : {
      showMouseCoordinate: function(addTen, event) {
        this.number += addTen;
            this.x = event.clientX;
            this.y = event.clientY;
      }
    }
  }).mount('#mouse')
</script>

</body>
</html>
