<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $mailsTable = config('filament-better-mails.mails.database.tables.mails', 'mails');
        $eventsTable = config('filament-better-mails.mails.database.tables.events', 'mail_events');
        $polymorphTable = config('filament-better-mails.mails.database.tables.polymorph', 'mailables');
        $attachmentsTable = config('filament-better-mails.mails.database.tables.attachments', 'mail_attachments');
        $mailModel = config('filament-better-mails.mails.models.mail');

        Schema::create($mailsTable, function (Blueprint $table): void {
            $table->id();
            $table->string('uuid')->nullable()->index();
            $table->string('mail_class')->nullable()->index();
            $table->string('transport');
            $table->string('mailer');
            $table->string('stream_id')->nullable();

            $table->string('subject')->nullable();
            $table->json('from')->nullable();
            $table->json('reply_to')->nullable();
            $table->json('to')->nullable();
            $table->json('cc')->nullable();
            $table->json('bcc')->nullable();
            $table->text('html')->nullable();
            $table->text('text')->nullable();

            $table->unsignedBigInteger('opens')->default(0);
            $table->unsignedBigInteger('clicks')->default(0);
            $table->json('tags')->nullable();

            $table->timestamp('sent_at')->nullable();
            $table->timestamp('resent_at')->nullable();
            $table->timestamp('accepted_at')->nullable();
            $table->timestamp('delivered_at')->nullable();
            $table->timestamp('last_opened_at')->nullable();
            $table->timestamp('last_clicked_at')->nullable();
            $table->timestamp('complained_at')->nullable();
            $table->timestamp('soft_bounced_at')->nullable();
            $table->timestamp('hard_bounced_at')->nullable();
            $table->timestamp('unsubscribed_at')->nullable();
            $table->timestamp('scheduled_at')->nullable();
            $table->timestamp('suppressed_at')->nullable();
            $table->timestamps();
        });

        Schema::create($eventsTable, function (Blueprint $table) use ($mailModel): void {
            $table->id();
            $table->foreignIdFor($mailModel, 'mail_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('type');
            $table->string('ip_address')->nullable();
            $table->string('hostname')->nullable();
            $table->string('platform')->nullable();
            $table->string('os')->nullable();
            $table->string('browser')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('city')->nullable();
            $table->char('country_code', 2)->nullable();
            $table->string('link')->nullable();
            $table->string('tag')->nullable();
            $table->json('payload')->nullable();
            $table->timestamp('occurred_at')->nullable();
            $table->timestamp('unsuppressed_at')->nullable();
            $table->timestamps();
        });

        Schema::create($polymorphTable, function (Blueprint $table) use ($mailModel): void {
            $table->id();
            $table->foreignIdFor($mailModel)
                ->constrained()
                ->cascadeOnDelete();
            $table->morphs('mailable');
        });

        Schema::create($attachmentsTable, function (Blueprint $table) use ($mailModel): void {
            $table->id();
            $table->foreignIdFor($mailModel, 'mail_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('disk');
            $table->string('uuid');
            $table->string('filename');
            $table->string('mime');
            $table->boolean('inline');
            $table->bigInteger('size');
            $table->timestamps();
        });
    }
};
