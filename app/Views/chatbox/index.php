<?= $this->extend('layout/layouts') ?>

<?= $this->section('content') ?>

<div class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="flex flex-col w-full max-w-xl border rounded-lg shadow-lg bg-white my-4 mx-10">
        <!-- Chat Header -->
        <div class="p-4 text-white flex items-center justify-between rounded-t-lg bg-chat-top">
            <h2 class="font-bold"><span style="color: #182c2a;">Tentang</span> Loker</h2>
            <!-- <button class="text-white">&times;</button> -->
        </div>

        <div class="max-h-96 overflow-auto">
            <!-- Chat Messages -->
            <?php foreach($messageItems as $messageItem) { ?>
                <div class="flex flex-col p-4 gap-y-6">
                    <?php if ($messageItem->userMessage) { ?>
                    <div class="text-right">
                        <div class="text-white p-3 rounded-lg inline-block bg-chat-user">
                            <p><?= makeUrltoLink(nl2br($messageItem->userMessage)) ?></p>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if ($messageItem->botResponse) { ?>
                    <div>
                        <div class="bg-gray-200 p-3 rounded-lg inline-block">
                            <p class="text-gray-700"><?= makeUrltoLink(nl2br($messageItem->botResponse)) ?></p>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- Add more messages here -->
                </div>
                <?php }; ?>
            </div>
                <!-- Chat Input -->
                <div class="p-4 rounded-b-lg flex items-center bg-chat">
                    <input type="text" placeholder="Type your message..." class="flex-1 p-2 border rounded-lg focus:outline-none focus:border-green-500">
                    <button class="text-white p-2 rounded-lg ml-2 bg-btn">Send</button>
                </div>
            </div>
        </div>
        
        <?= $this->endSection() ?>
