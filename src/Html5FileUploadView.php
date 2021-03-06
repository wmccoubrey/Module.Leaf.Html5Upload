<?php

/**
 * Copyright (c) 2016 RhubarbPHP.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Rhubarb\Leaf\Controls\Html5Upload;

use Rhubarb\Leaf\Controls\Common\FileUpload\SimpleFileUploadView;

class Html5FileUploadView extends SimpleFileUploadView
{
    protected $requiresContainer = true;
    protected $requiresStateInputs = true;

    protected function getViewBridgeName()
    {
        return 'Html5FileUploadViewBridge';
    }

    public function getDeploymentPackage()
    {
        $package = parent::getDeploymentPackage();
        $package->resourcesToDeploy[] = __DIR__ . '/Html5FileUploadViewBridge.js';
        return $package;
    }

    protected function printViewContent()
    {
        $this->model->addHtmlAttribute('multiple', 'multiple');

        parent::printViewContent();
    }

    protected function getInputName()
    {
        return $this->model->leafPath . '[]';
    }
}
