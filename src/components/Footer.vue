<template>
  <v-footer height="40" app>
    <a v-for="item in items" :key="item.title" :href="item.href" :title="item.title"
      class="d-inline-block mx-2 social-link" rel="noopener noreferrer" target="_blank">
      <v-icon :icon="item.icon" :size="item.icon === '$vuetify' ? 24 : 16" />
    </a>

    <div class="text-caption text-disabled" style="position: absolute; right: 16px;">
      &copy; <span class="d-none d-sm-inline-block text-lowercase">M1CH93L</span>
      —
      <a class="text-decoration-none on-surface"
        href="https://github.com/m1ch93l/enrollment-required-documents-checklist" rel="noopener noreferrer"
        target="_blank">
        Enrollment Required Documents Checklist
      </a>
    </div>
  </v-footer>
</template>

<script setup>
  const items = [
    {
      title: 'Vuetify Documentation',
      icon: `$vuetify`,
      href: 'https://vuetifyjs.com/',
    },
    {
      title: 'Facebook',
      icon: 'mdi-facebook',
      href: 'https://web.facebook.com/michael.banaria25',
    },
    {
      title: 'Twitter',
      icon: 'mdi-twitter',
      href: 'https://twitter.com/michaelbbanaria',
    },
    {
      title: 'LinkedIn',
      icon: `mdi-linkedin`,
      href: 'https://www.linkedin.com/in/m1ch93l/',
    },
    {
      title: 'Vuetify Discord',
      icon: `mdi-github`,
      href: 'https://github.com/m1ch93l',
    },
  ]
</script>

<style scoped lang="sass">
  .social-link :deep(.v-icon)
    color: rgba(var(--v-theme-on-background), var(--v-disabled-opacity))
    text-decoration: none
    transition: .2s ease-in-out

    &:hover
      color: rgba(25, 118, 210, 1)
</style>
