<?php
namespace globalrh;

interface Routes {
	public function getRoutes(): array;
	public function getAuthentication(): \globalrh\Authentication;
	public function checkPermission($permission): bool;
}