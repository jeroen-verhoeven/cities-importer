<?php

/**
 * Fetch European countries from REST API
 * @return array Array of countries, empty if failed
 */
function get_european_countries_from_api(): array {
    $url = 'https://restcountries.com/v3.1/region/europe';

    WP_CLI::log("Fetching European countries from REST API...");

    $response = wp_remote_get($url);

    if (is_wp_error($response)) {
        WP_CLI::warning("REST API request failed: " . $response->get_error_message());
        return [];
    }

    $status = wp_remote_retrieve_response_code($response);
    if ($status !== 200) {
        WP_CLI::warning("REST API returned status code {$status}");
        return [];
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    if (!is_array($data)) {
        WP_CLI::warning("Failed to decode REST API response to array.");
        return [];
    }

    WP_CLI::log("Successfully retrieved " . count($data) . " countries.");
    return $data;
}