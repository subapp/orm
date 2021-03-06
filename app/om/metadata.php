<?php

/**
 * Generated By Subapp\Orm Generator
 * @author Ivan Hontarenko
 *
 * IMPORTANT:
 *      Don't edit this file!
 *      This file was generated automatically, and it can happen again
 *      and as a consequence it will overwrite your changes.
 */

return array (
  'CvLand\\PhpDatabaseLayer\\User' => 
  array (
    'entityClass' => 'CvLand\\PhpDatabaseLayer\\User',
    'entityRepositoryClass' => 'CvLand\\PhpDatabaseLayer\\UserRepository',
    'tableName' => 'user',
    'identifier' => 'id',
    'rawSQLNames' => 
    array (
      'id' => 'user.id',
      'name' => 'user.name',
      'password' => 'user.password',
      'access' => 'user.accessBitMask',
      'status' => 'user.status',
      'created' => 'user.created',
    ),
    'names' => 
    array (
      'id' => 'id',
      'name' => 'name',
      'password' => 'password',
      'access' => 'accessBitMask',
      'status' => 'status',
      'created' => 'created',
    ),
    'relations' => 
    array (
    ),
    'enumerations' => 
    array (
      'status' => 
      array (
        0 => 'active',
        1 => 'blocked',
        2 => 'deleted',
      ),
    ),
    'default' => 
    array (
    ),
    'nullables' => 
    array (
    ),
    'unsigned' => 
    array (
      'id' => 'id',
      'accessBitMask' => 'access',
    ),
    'primary' => 
    array (
      'id' => 'id',
    ),
    'instances' => 
    array (
      'id' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'id',
         'name' => 'id',
         'type' => 
        Subapp\Orm\Schema\Types\IntegerType::__set_state(array(
           'length' => 11,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => true,
         'nullable' => false,
         'autoIncrement' => true,
         'primaryKey' => true,
         'identity' => false,
      )),
      'name' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'name',
         'name' => 'name',
         'type' => 
        Subapp\Orm\Schema\Types\StringType::__set_state(array(
           'length' => 128,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => false,
         'nullable' => false,
         'autoIncrement' => false,
         'primaryKey' => false,
         'identity' => false,
      )),
      'password' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'password',
         'name' => 'password',
         'type' => 
        Subapp\Orm\Schema\Types\StringType::__set_state(array(
           'length' => 128,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => false,
         'nullable' => false,
         'autoIncrement' => false,
         'primaryKey' => false,
         'identity' => false,
      )),
      'access' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'accessBitMask',
         'name' => 'access',
         'type' => 
        Subapp\Orm\Schema\Types\IntegerType::__set_state(array(
           'length' => 0,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => true,
         'nullable' => false,
         'autoIncrement' => false,
         'primaryKey' => false,
         'identity' => false,
      )),
      'status' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'status',
         'name' => 'status',
         'type' => 
        Subapp\Orm\Schema\Types\EnumType::__set_state(array(
           'length' => 0,
           'precision' => 0,
           'extra' => 
          array (
            0 => 'active',
            1 => 'blocked',
            2 => 'deleted',
          ),
        )),
         'default' => NULL,
         'unsigned' => false,
         'nullable' => false,
         'autoIncrement' => false,
         'primaryKey' => false,
         'identity' => false,
      )),
      'created' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'created',
         'name' => 'created',
         'type' => 
        Subapp\Orm\Schema\Types\DatetimeType::__set_state(array(
           'length' => 0,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => false,
         'nullable' => false,
         'autoIncrement' => false,
         'primaryKey' => false,
         'identity' => false,
      )),
    ),
  ),
  'CvLand\\PhpDatabaseLayer\\SystemUser' => 
  array (
    'entityClass' => 'CvLand\\PhpDatabaseLayer\\SystemUser',
    'entityRepositoryClass' => 'CvLand\\PhpDatabaseLayer\\SystemUserRepository',
    'tableName' => 'systemUser',
    'identifier' => 'id',
    'rawSQLNames' => 
    array (
      'id' => 'systemUser.id',
      'name' => 'systemUser.name',
      'password' => 'systemUser.password',
      'access' => 'systemUser.accessBitMask',
      'created' => 'systemUser.created',
    ),
    'names' => 
    array (
      'id' => 'id',
      'name' => 'name',
      'password' => 'password',
      'access' => 'accessBitMask',
      'created' => 'created',
    ),
    'relations' => 
    array (
    ),
    'enumerations' => 
    array (
    ),
    'default' => 
    array (
    ),
    'nullables' => 
    array (
    ),
    'unsigned' => 
    array (
      'id' => 'id',
      'accessBitMask' => 'access',
    ),
    'primary' => 
    array (
      'id' => 'id',
    ),
    'instances' => 
    array (
      'id' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'id',
         'name' => 'id',
         'type' => 
        Subapp\Orm\Schema\Types\IntegerType::__set_state(array(
           'length' => 11,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => true,
         'nullable' => false,
         'autoIncrement' => true,
         'primaryKey' => true,
         'identity' => false,
      )),
      'name' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'name',
         'name' => 'name',
         'type' => 
        Subapp\Orm\Schema\Types\StringType::__set_state(array(
           'length' => 128,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => false,
         'nullable' => false,
         'autoIncrement' => false,
         'primaryKey' => false,
         'identity' => false,
      )),
      'password' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'password',
         'name' => 'password',
         'type' => 
        Subapp\Orm\Schema\Types\StringType::__set_state(array(
           'length' => 128,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => false,
         'nullable' => false,
         'autoIncrement' => false,
         'primaryKey' => false,
         'identity' => false,
      )),
      'access' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'accessBitMask',
         'name' => 'access',
         'type' => 
        Subapp\Orm\Schema\Types\IntegerType::__set_state(array(
           'length' => 0,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => true,
         'nullable' => false,
         'autoIncrement' => false,
         'primaryKey' => false,
         'identity' => false,
      )),
      'created' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'created',
         'name' => 'created',
         'type' => 
        Subapp\Orm\Schema\Types\DatetimeType::__set_state(array(
           'length' => 0,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => false,
         'nullable' => false,
         'autoIncrement' => false,
         'primaryKey' => false,
         'identity' => false,
      )),
    ),
  ),
  'CvLand\\PhpDatabaseLayer\\UserToken' => 
  array (
    'entityClass' => 'CvLand\\PhpDatabaseLayer\\UserToken',
    'entityRepositoryClass' => 'CvLand\\PhpDatabaseLayer\\UserTokenRepository',
    'tableName' => 'userToken',
    'identifier' => 'id',
    'rawSQLNames' => 
    array (
      'id' => 'userToken.id',
      'userId' => 'userToken.userId',
      'token' => 'userToken.token',
      'created' => 'userToken.created',
    ),
    'names' => 
    array (
      'id' => 'id',
      'userId' => 'userId',
      'token' => 'token',
      'created' => 'created',
    ),
    'relations' => 
    array (
    ),
    'enumerations' => 
    array (
    ),
    'default' => 
    array (
    ),
    'nullables' => 
    array (
    ),
    'unsigned' => 
    array (
      'id' => 'id',
      'userId' => 'userId',
    ),
    'primary' => 
    array (
      'id' => 'id',
    ),
    'instances' => 
    array (
      'id' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'id',
         'name' => 'id',
         'type' => 
        Subapp\Orm\Schema\Types\IntegerType::__set_state(array(
           'length' => 11,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => true,
         'nullable' => false,
         'autoIncrement' => true,
         'primaryKey' => true,
         'identity' => false,
      )),
      'userId' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'userId',
         'name' => 'userId',
         'type' => 
        Subapp\Orm\Schema\Types\IntegerType::__set_state(array(
           'length' => 11,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => true,
         'nullable' => false,
         'autoIncrement' => false,
         'primaryKey' => false,
         'identity' => false,
      )),
      'token' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'token',
         'name' => 'token',
         'type' => 
        Subapp\Orm\Schema\Types\StringType::__set_state(array(
           'length' => 128,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => false,
         'nullable' => false,
         'autoIncrement' => false,
         'primaryKey' => false,
         'identity' => false,
      )),
      'created' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'created',
         'name' => 'created',
         'type' => 
        Subapp\Orm\Schema\Types\DatetimeType::__set_state(array(
           'length' => 0,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => false,
         'nullable' => false,
         'autoIncrement' => false,
         'primaryKey' => false,
         'identity' => false,
      )),
    ),
  ),
  'CvLand\\PhpDatabaseLayer\\SystemUserToken' => 
  array (
    'entityClass' => 'CvLand\\PhpDatabaseLayer\\SystemUserToken',
    'entityRepositoryClass' => 'CvLand\\PhpDatabaseLayer\\SystemUserTokenRepository',
    'tableName' => 'systemUserToken',
    'identifier' => 'id',
    'rawSQLNames' => 
    array (
      'id' => 'systemUserToken.id',
      'userId' => 'systemUserToken.userId',
      'token' => 'systemUserToken.token',
      'created' => 'systemUserToken.created',
    ),
    'names' => 
    array (
      'id' => 'id',
      'userId' => 'userId',
      'token' => 'token',
      'created' => 'created',
    ),
    'relations' => 
    array (
    ),
    'enumerations' => 
    array (
    ),
    'default' => 
    array (
    ),
    'nullables' => 
    array (
    ),
    'unsigned' => 
    array (
      'id' => 'id',
      'userId' => 'userId',
    ),
    'primary' => 
    array (
      'id' => 'id',
    ),
    'instances' => 
    array (
      'id' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'id',
         'name' => 'id',
         'type' => 
        Subapp\Orm\Schema\Types\IntegerType::__set_state(array(
           'length' => 11,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => true,
         'nullable' => false,
         'autoIncrement' => true,
         'primaryKey' => true,
         'identity' => false,
      )),
      'userId' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'userId',
         'name' => 'userId',
         'type' => 
        Subapp\Orm\Schema\Types\IntegerType::__set_state(array(
           'length' => 11,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => true,
         'nullable' => false,
         'autoIncrement' => false,
         'primaryKey' => false,
         'identity' => false,
      )),
      'token' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'token',
         'name' => 'token',
         'type' => 
        Subapp\Orm\Schema\Types\StringType::__set_state(array(
           'length' => 128,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => false,
         'nullable' => false,
         'autoIncrement' => false,
         'primaryKey' => false,
         'identity' => false,
      )),
      'created' => 
      Subapp\Orm\Schema\Field::__set_state(array(
         'column' => 'created',
         'name' => 'created',
         'type' => 
        Subapp\Orm\Schema\Types\DatetimeType::__set_state(array(
           'length' => 0,
           'precision' => 0,
           'extra' => NULL,
        )),
         'default' => NULL,
         'unsigned' => false,
         'nullable' => false,
         'autoIncrement' => false,
         'primaryKey' => false,
         'identity' => false,
      )),
    ),
  ),
);