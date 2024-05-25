<?php

declare(strict_types=1);

namespace Drupal\testmodule;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a testetity entity type.
 */
interface TestetityInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
