var pmmpFeed = new Instafeed({
    get: 'user',
    userId: '7238015515',
    accessToken: '7238015515.8e58ac3.acf5e7ad8ce94185814e6609baf2b9c5',
    resolution: 'standard_resolution',
    template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a>',
    sortBy: 'most-recent',
    limit: 8,
    links: false
});
pmmpFeed.run();