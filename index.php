<?php
$message = "Hello Vue!";
?>
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

<div id="app" class="m-3">
  <button class="btn btn-primary" @click="count++">{{ message }} : {{ count }} {{ test }}</button>
  <div v-bind="objectOfAttrs">test</div>
  {{ ok ? 'YES' : 'NO' }} <br>
  {{ number + 1 }} <br>
  {{ message.split('').reverse().join('') }}
  <div :id="list-${id}">{{ id }}</div>


</div>
  
<div id="test2" class="m-3">
  <p>Name: {{ name }}</p>
  <input type="text" v-on:input="changeName">

  <input type="text" v-on:keyup.enter="klavyeKullanimi">
</div>


<script>
  Vue.createApp({
    data() {
      return {
        message: '<?=$message?>',
        count: 0,
        objectOfAttrs: {
        id: 'container',
        class: 'wrapper my-3'
      },
      ok: 0,
      number: 10,
      id: 4
      }
    }
  }).mount('#app')

/*  function test() {
    alert("test")
  }
  */
  
  Vue.createApp({
    data() {
      return {
       name: "omer"
      }
    },
    methods : {
      changeName: function(e) {
        this.name = e.target.value;
      },
      klavyeKullanimi: function (e) {
            console.log(e.target.value)
        }
    }
  }).mount('#test2')


</script>

</body>
</html>
