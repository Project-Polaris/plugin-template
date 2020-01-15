<?php

namespace Polaris\PluginTemplate;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Event;
use App\PluginBase;

class PluginTemplateServiceProvider extends PluginBase
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->addCommands();
        $this->addMigrations();
        $this->addRoutes();
        $this->addViews();
        $this->addTranslations();
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/metadata.plugin-template.php', 'metadata.plugin-template');
        $this->mergeConfigFrom(__DIR__ . '/Config/plugin-template.config.php', 'plugin-template.config');
        $this->mergeConfigFrom(__DIR__ . '/Config/web.sidebar.user.php', 'web.sidebar.user');
        $this->mergeConfigFrom(__DIR__ . '/Config/web.sidebar.admin.php', 'web.sidebar.admin');
    }
    /**
     * Return the plugin public name as it should be displayed into settings.
     *
     * @return string
     * @example Shadowsocks Protocol
     *
     */
    public function getName(): string
    {
        return config('metadata.plugin-template.name');
    }
    /**
     * Return the plugin repository address.
     *
     * @example https://github.com/polaris/protocol-shadowsocks
     *
     * @return string
     */
    public function getPackageRepositoryUrl(): string
    {
        return config('metadata.plugin-template.repository_url');
    }
    /**
     * Return the plugin technical name as published on package manager.
     *
     * @return string
     * @example protocol-shadowsocks
     *
     */
    public function getPackagistPackageName(): string
    {
        return config('metadata.plugin-template.vendor_name');
    }
    /**
     * Return the plugin vendor tag as published on package manager.
     *
     * @return string
     * @example polaris
     *
     */
    public function getPackagistVendorName(): string
    {
        return config('metadata.plugin-template.vendor_name');
    }
    /**
     * Return the plugin installed version.
     *
     * @return string
     */
    public function getVersion(): string
    {
        return config('metadata.plugin-template.version');
    }
    /**
     * Import migrations
     */
    private function addMigrations()
    {
        // $this->loadMigrationsFrom(__DIR__ . '/database/migrations/');
    }
    /**
     * Register cli commands
     */
    private function addCommands()
    {
        // $this->commands([
        //     DriverUpdateSets::class,
        //     DriverApplyPolicies::class,
        // ]);
    }
    /**
     * Register views
     */
    private function addViews()
    {
        // $this->loadViewsFrom(__DIR__ . '/resources/views', 'plugin-template');
    }
    /**
     * Import routes
     */
    private function addRoutes()
    {
        // $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
    }
    /**
     * Import translations
     */
    private function addTranslations()
    {
        // $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'plugin-template');
    }
}
