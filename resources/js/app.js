import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


import { InstantSearch } from 'algoliasearch-helper';

const search = new InstantSearch({
    appId: process.env.ALGOLIA_APP_ID,
    apiKey: process.env.ALGOLIA_API_KEY,
    indexName: 'categories',
});

search.addWidget(
    input('#algolia-search', {
        placeholder: 'Buscar',
    })
);

search.start();
