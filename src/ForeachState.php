<?php

declare(strict_types=1);

/**
 * Copyright 2020-Present The Serverless Workflow Specification Authors
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Serverless\Workflow;

final class ForEachState extends State
{
    public string|null $id = null;

    public string|null $name = null;

    public string|null $type = null;

    public bool|End|null $end = null;

    public string|null $inputCollection = null;

    public string|null $outputCollection = null;

    public string|null $iterationParam = null;

    public int|string|null $batchSize = null;

    /** @var Action[]|null */
    public array|null $actions = null;

    public ForEachStateTimeOut|null $timeouts = null;

    public StateDataFilter|null $stateDataFilter = null;

    /** @var Error[]|null */
    public array|null $onErrors = null;

    public string|Transition|null $transition = null;

    public string|null $compensatedBy = null;

    public bool|null $usedForCompensation = null;

    public string|null $mode = null;

    public Metadata|null $metadata = null;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->usedForCompensation ??= false;
        $this->mode ??= 'parallel';
        $this->type ??= 'foreach';
    }
}
