<?php

/**
 * Copyright 2021 Jeremy Presutti <Jeremy@Presutti.us>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

declare(strict_types=1);

namespace Mocks;

use Feast\BaseMapper;
use Feast\BaseModel;

class MockBaseMapper extends BaseMapper
{
    public const TABLE_NAME = 'TestTable';
    protected const OBJECT_NAME = MockBaseModel::class;
    protected const PRIMARY_KEY = 'id';

    public function findByPrimaryKey(int|string $value, bool $validate = false): ?BaseModel
    {
        if ($value === 'MAINTEST') {
            return new MockBaseModel();
        }
        return parent::findByPrimaryKey($value, $validate); // TODO: Change the autogenerated stub
    }
}
