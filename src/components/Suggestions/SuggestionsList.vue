<template>
  <v-fade-transition appear>
    <div :class="[$screen.lg ? 'cards' : 'container cards']">
      <TabletNavbar v-if="$screen.lg" />
      <div class="cards__holder">
        <TabletExtension v-if="$screen.lg" />
        <template v-for="(feed, index) in suggestions">
          <FeedbackCard
            v-if="suggestions.length"
            :key="feed.id"
            :index="index"
            :feed="feed"
            @onVote="upVoteFeedbackById(feed.id)"
            @direct="directToFeedback(feed.id)"
          />
        </template>
        <Empty />
      </div>
    </div>
  </v-fade-transition>
</template>

<script>
import FeedbackCard from "@/components/Layout/FeedbackCard/FeedbackCard.vue";
import TabletNavbar from "../Layout/TabletLayout/TabletNavbar.vue";
import TabletExtension from "../Layout/TabletLayout/TabletExtension.vue";
import Empty from "../Empty/Empty.vue";
export default {
  components: { FeedbackCard, TabletNavbar, TabletExtension, Empty },
  name: "SuggestionList",
};
</script>

<style lang="scss">
.cards {
  &__holder {
    display: flex;
    align-items: center;
    flex-direction: column;
    gap: 1.5rem;
  }
}
</style>
