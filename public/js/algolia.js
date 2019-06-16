const client = algoliasearch("KJFBUN1ZEP", "373dd7bad52659f69ce8ffc93c858818");
const players = client.initIndex('products');

autocomplete('#aa-search-input', {}, [
    {
      source: autocomplete.sources.hits(players, { hitsPerPage: 5 }),
      displayKey: 'name',
      templates: {
        header: '<div class="aa-suggestions-category">Our products</div>',
        suggestion({_highlightResult}) {
            const markup = `
                <div class="algolia-result">
                    <span>                    
                        <img src="${window.location.origin}/storage/${_highlightResult.picture1.value}" class="algolia-res-img"/>
                        ${_highlightResult.name.value}
                    </span>
                    <span>$${_highlightResult.price.value}</span>
                </div>
                <div class="algolia-details">
                <span style="color:#919191">${_highlightResult.details.value}</span>
                </div>
            `;
            return markup;
        },
        empty: function(result){
            return 'Sorry we did not find any result for "'+result.query+'"';
        }
      }
   
    }
]).on('autocomplete:selected',function(event,suggestion,dataset){
    window.location.href = window.location.origin + '/shop/' + suggestion.id;
});