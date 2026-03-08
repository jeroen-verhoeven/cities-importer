
# Cities importer plugin

A custom WordPress plugin for fetching and importing European cities. The plugin fetches data from a public REST endpoint. 
Fetched cities will be updated or imported into WordPress. 

The plugin has an option to let OpenAI provide small summary texts for each city. 

Notes: this is a demo only. It has a dependency on ACF for storing meta data. This plugin is also written for a custom WordPress theme which has a custom post type that works with this plugin. 


## 1. Purpose
This plugin is for demo purposes only. It is used in combination with a custom ACF block, using MapBox to show the location of each city on the map.

## 2. See the imported cities
You can see the results of the imported cities on: https://www.jeroen-verhoeven.com/map-block/


## 3. Requirements
- SSH access to WordPress installation
- WP CLI


### 3.1 Optional MapBox API key
For demo purposes, the cities will be plotted on a MapBox map. You will need a Mapbox API key to render the map.

### 3.2 Optional OpenAI API key
This demo has an option to connect with OpenAI to prompt for summary texts for each city. An API key is needed to use this option.

## 4. Usage
Enable a SSH connection and navigate to the WordPress root folder. Use this command to start the import process. 

```bash
wp import:cities
```

### 4.1 optional
Optionally, you can also enable Open AI to write a summary text for each city. To use this option, you will need to add a flag to the SSH command

The full command will be:

```bash
wp import:cities --summary
```

Beware: to use this option you will need to provide your own OpenAI API key.





