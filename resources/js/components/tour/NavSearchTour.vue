<template>
  <a-card :bordered="false" :bodyStyle="{ padding: '16px' }" :style="{ marginBottom: '16px' }">
    <a-row type="flex" justify="space-between" align="middle">
      <a-col :xs="24" :sm="24" :md="8" :lg="8">
        <a-input-search placeholder="Tìm kiếm theo tên tour" :defaultValue="$route.query.q" @search="onSearch" allowClear />
      </a-col>
      <a-col :xs="24" :sm="24" :md="4" :lg="4">
        <a-select placeholder="Ưu tiên xem" :value="defaultValueSort" @change="onChangeSort" style="width:100%">
          <a-select-option value="new">Mới nhất</a-select-option>
          <a-select-option value="lowPrice">Giá thấp đến cao</a-select-option>
          <a-select-option value="highPrice">Giá cao đến thấp</a-select-option>
        </a-select>
      </a-col>
    </a-row>
  </a-card>
</template>

<script>
  export default {
    computed: {
      defaultValueSort() {
        const sortBy = this.$route.query.sortBy;
        const orderBy = this.$route.query.orderBy;
        if (sortBy === "created_at") return "new";
        if (sortBy === "price_default") {
          if (orderBy === "asc") return "lowPrice";
          if (orderBy === "desc") return "highPrice";
        }
        return undefined;
      },
    },
    methods: {
      onSearch(value) {
        if (value) {
          this.$emit("onSearch", value);
        }
      },
      onChangeSort(value) {
        value === "new" && this.sortNew();
        value === "lowPrice" && this.sortLowPrice();
        value === "highPrice" && this.sortHighPrice();
      },
      sortNew() {
        let sortBy = "created_at";
        let orderBy = "desc";
        this.$emit("changeSort", { sortBy, orderBy });
      },
      sortLowPrice() {
        let sortBy = "price_default";
        let orderBy = "asc";
        this.$emit("changeSort", { sortBy, orderBy });
      },
      sortHighPrice() {
        let sortBy = "price_default";
        let orderBy = "desc";
        this.$emit("changeSort", { sortBy, orderBy });
      },
    },
  };
</script>

<style lang="less" scoped>
  .nav-right {
    display: flex;
    justify-content: space-between;
    align-items: center;
    .nav-left-item {
      font-weight: 500;
      background: rgba(24, 144, 255, 0.15);
      color: #1890ff;
      padding: 4px 8px;
      border-radius: 6px;
    }
    .nav-right-item {
      display: flex;
      align-items: center;
      div {
        font-size: 14px;
        font-weight: 400;
        margin-right: 12px;
      }
    }
  }
</style>
