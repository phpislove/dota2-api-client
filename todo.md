# Match finder

- retrieving match history as a php array (parsed JSON) using given API key
- ability to choose how many matches you want to retrieve
- ability to choose a match you want to start at (start_at_match_id)
- ability to choose skill bracket (normal, high, very high)
- ability to choose date (in unix time format - in secs since 1 Jan 1970)
- ability to choose hero id or account id (not SteamID, account number portion)
- ability to choose player name (exact match)

# Match (entity)

- retrieving match duration +, region +, lobby type +, skill bracket (?), game mode + , start time + 
- retrieving the winner (dire/radiant) +, match id +
- retrieving players (Player entity) +

# Player (entity)

- retrieving account id, hero id, items (as collection of Item entities)
- retrieving kills, deaths, assists, gold, last hits, denies, gpm, xpm
- retrieving gold spent (total), level hero damage, tower damage, hero healing
- retrieving whether player has abandoned the game (leaver_status)
- retrieving the skill build (ability points spent)

# Item (entity)

- retrieving its id, localized name and picture url

# Hero (entity)

- the same as for the item entity
