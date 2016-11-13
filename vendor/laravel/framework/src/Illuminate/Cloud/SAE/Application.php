<?php
namespace Illuminate\Cloud\SAE;
use Illuminate\Foundation\Application as DefaultApplication;

class Application extends DefaultApplication{
	/**
	 * Get the path to the configuration cache file.
	 *
	 * @return string
	 */
	public function getCachedConfigPath()
	{
	    return 'saestor://'.SAE_STORAGE.'/bootstrap/cache/config.php';
	}

	/**
	 * Get the path to the routes cache file.
	 *
	 * @return string
	 */
	public function getCachedRoutesPath()
	{
	    return 'saestor://'.SAE_STORAGE.'/bootstrap/cache/routes.php';
	}

	/**
	 * Get the path to the cached "compiled.php" file.
	 *
	 * @return string
	 */
	public function getCachedCompilePath()
	{
	    return 'saestor://'.SAE_STORAGE.'/bootstrap/cache/compiled.php';
	}

	/**
	 * Get the path to the cached services.json file.
	 *
	 * @return string
	 */
	public function getCachedServicesPath()
	{
	    return 'saestor://'.SAE_STORAGE.'/bootstrap/cache/services.json';
	}

	/**
	 * Get the path to the storage directory.
	 *
	 * @return string
	 */
	public function storagePath()
	{
	    return $this->storagePath ?: 'saestor://'.SAE_STORAGE;
	}
}