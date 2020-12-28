<template>
  <div class="group-input-group">
      <div class="input-group">
          <label for="status" class="form-label">Статус</label>
          <select  v-model="status" v-bind:value="teacher" name="status" id="status" class="form-input">
              <option value="" disabled selected>Статус</option>
              <option value="student">Ученик</option>
              <option value="teacher">Преподаватель</option>
          </select>
      </div>

      <div v-if="status === 'student'" class="input-group">
          <label for="group" class="form-label">Группа</label>
          <input name="group" type="text" id="group" class="form-input" placeholder="111">
      </div>
      <div v-else class="input-group">
          <input value="teacher" name="group" type="hidden" id="group" class="form-input" placeholder="111">
      </div>
  </div>
</template>
<script>

  export default {
    data() {
          return {
              status: ''
      }

}}

</script>
