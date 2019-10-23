<template>
  <div id="nav">
    <div class="nav-item">
      <a href="/">home</a>
    </div>
    <div class="nav-item">
      <a href="/menu">menu</a>
    </div>
    <div class="nav-item">
      <a href="/">setting</a>
    </div>
  </div>
</template>

<script>
</script>

<style scoped>
  #nav{
    display: flex;
    justify-content: space-around;
    margin-bottom: 20px;
    background-color: #222;
  }

  a{
    text-decoration: none;
    color: #eee;
  }

  a:visited{
    color: #eee;
  }
</style>