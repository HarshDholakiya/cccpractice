<?php
class Import_Controller_Import extends Core_Controller_Admin_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getchild('head')->addCss('header.css');
        //    $layout->getChild('head')->addcss('catalog/category/form.css');
        $layout->getchild('head')->addCss('footer.css');
        $content = $layout->getChild('content');
        $productView = Mage::getBlock('import/import');
        $content->addChild('view', $productView);
        $layout->toHtml();

    }
    public function saveAction()
    {
        // $csvfileData = $this->getRequest()->getFileData('csvfile');
        // $csvfileName = $csvfileData['name'];
        // // $bannerData['banner_path'] = $csvName;
        // $importModel = Mage::getModel('import/import');
        // $importMediaPath = Mage::getBaseDir('media/import/').$csvfileName;
        // // print_r($csvfileData);
        // // print_r($csvfileName);

        // move_uploaded_file(
        //     $csvfileData['tmp_name'],
        //     $importMediaPath
        // );
        // $importModel->setData($csvfileData)->save();
        // $this->setRedirect('admin/banner/list');

        $csvfileData = $this->getRequest()->getFileData('csvfile');
        // print_r($csvfileData);
        $csvfileName = $csvfileData['name'];
        if (!empty ($csvfileName)) {
            $targetDir = Mage::getBaseDir('media/import/') . $csvfileName;
            $csvfileData['name'] = $csvfileName;

            if (move_uploaded_file($csvfileData["tmp_name"], $targetDir)) {
                echo "File uploaded successfully.";
            } else {
                echo "Error uploading file.";
            }
        }
        // $importModel = Mage::getModel("import/import");
        // $importModel->setData($csvfileData)->save();
    }

    public function readAction()
    {
        $row = 0;
        $path = Mage::getBaseDir("media/import") . "/harsh.csv";
        if (!file_exists($path)) {
            echo "File not found: $path";
            exit;
        }

        if (($handle = fopen($path, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if (!$row) {
                    $header = $data;
                    $row++;
                    continue;
                }
                // print_r($header);
                // die;
                $data1 = array_combine($header, $data);
                // print_r($data1);
                // die;
                $jsonData = json_encode($data1);
                // print_r($jsonData);
                // die;
                Mage::getModel("import/import")->setData(["data" => $jsonData])
                    ->save();

                echo "<br>";
                $row++;
            }
            echo $row;
            fclose($handle);
        } else {
            echo "Failed to open file: $path";
        }

    }
    public function importAction()
    {
        $dbAdapter = new Core_Model_DB_Adapter();

        try {
            $importData = Mage::getModel('import/import')->getCollection()->addFieldToFilter('status', 0)->getData();
            foreach ($importData as $importRow) {
                $data = json_decode($importRow->getData()['data'], true);              
                $dbAdapter->saveImport("catalog_product", $data);
                Mage::getModel('import/import')->setData($importRow->getData())->addData('status',1)->save();
            }
            echo "Records inserted successfully";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }


}