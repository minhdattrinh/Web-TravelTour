<template>
  <div class="container">
    <a-card
      class="login m-auto shadow"
      :bordered="false"
      :bodyStyle="{ padding: '16px' }"
    >
      <div class="logo">
        <router-link :to="{ name: 'home' }">
          <img src="/img/logo.png" alt="logo" />
        </router-link>
      </div>
      <slot></slot>
    </a-card>
  </div>
</template>

<script>
export default {
  created() {
    const fb = document.getElementById("fb-root");
    if (fb) {
      fb.style.display = "none";
    }
  },
};
</script>

<style lang="less" scoped>
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  overflow: hidden;
  background: url(https://bizweb.dktcdn.net/thumb/1024x1024/100/319/254/products/9.jpg?v=1529381887240)
    no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  .login {
    width: 410px;
    .logo {
      text-align: center;
      margin-bottom: 20px;
    }
  }
}
</style>
