<h2>Your file was successfully uploaded</h2>
    <p>
        <?php echo anchor('gallery/' . $upload_data['file_name'], 'Click here to view your upload') ?>
        <br />
        <?php echo anchor('upload', 'Upload Another File!'); ?>
    </p>