<template>
    <div class="container">
        <h1 class="text-center">Lista Atleti</h1>
        <div class="row row-cols-3">
            <div v-for="athlete in athletes" :key="athlete.id" class="col">
                <Card :athlete="athlete"/>
            </div>
        </div>
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item" :class="{ disabled: currentPage === 1 }">
                <a @click="getPosts(currentPage - 1)" class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li v-for="n in lastPage" :key="n" class="page-item" :class="{ active: currentPage === n }"><a @click="getPosts(n)" class="page-link" href="#">{{ n }}</a></li>
                <li class="page-item" :class="{ disabled: currentPage === lastPage}">
                <a @click="getPosts(currentPage + 1)" class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
    import Card from "../components/Card.vue";
    export default {
        name: 'Athletes',
        components: {
            Card,
        },
        data() {
            return {
                athletes: [],
                currentPage: 1,
                lastPage: 0,
            }
        },
        created() {
            this.getAthletes(1);
        },
        methods: {
            getAthletes(page) {
                axios.get("http://127.0.0.1:8000/api/athletes", {
                params: {
                    page: page,
                }
                })
                .then(resp => {
                    this.athletes = resp.data.results.data;
                    this.currentPage = resp.data.results.current_page;
                    this.lastPage = resp.data.results.last_page;
                });
            },
        },
    }
</script>
