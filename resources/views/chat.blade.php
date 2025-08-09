@extends('layouts.app')

@section('content')
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container apps-container apps-chat">
        <div class="nxl-content without-header nxl-full-content">
            <!-- [ Main Content ] start -->
            <div class="main-content d-flex">
                <!-- [ Content Sidebar ] start -->
                <div class="content-sidebar content-sidebar-xl" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-sidebar-header bg-white sticky-top hstack justify-content-between">
                        <h4 class="fw-bolder mb-0">Chat</h4>
                        <a href="javascript:void(0);" class="app-sidebar-close-trigger d-flex">
                            <i class="feather-x"></i>
                        </a>
                    </div>
                    <div class="content-sidebar-body">
                        <div class="py-0 px-4 d-flex align-items-center justify-content-between border-bottom">
                            <form class="sidebar-search">
                                <input type="search" class="py-3 px-0 border-0" id="chattingSearch"
                                    placeholder="Search...">
                            </form>
                            <div class="dropdown sidebar-filter">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                    class="d-flex align-items-center justify-content-center dropdown-toggle"
                                    data-bs-offset="0, 15"> Newest </a>
                                <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                    <li><a href="javascript:void(0)" class="dropdown-item">Oldest</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item active">Newest</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item">Favorites</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item">Online</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-sidebar-items" id="usersList">
                            @forelse($users as $user)
                                <div class="p-4 d-flex position-relative border-bottom c-pointer single-item user-item"
                                    data-user-id="{{ $user['id'] }}" data-user-name="{{ $user['name'] }}"
                                    data-is-favorite="{{ $user['is_favorite'] ? 'true' : 'false' }}">

                                    @if ($user['avatar_url'])
                                        <div class="avatar-image">
                                            <img src="{{ $user['avatar_url'] }}" class="img-fluid" alt="image">
                                        </div>
                                    @else
                                        <div class="bg-primary text-white avatar-text">{{ $user['initials'] }}</div>
                                    @endif

                                    <div class="ms-3 item-desc">
                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                                <span>{{ $user['name'] }}</span>
                                                <div
                                                    class="wd-5 ht-5 rounded-circle opacity-75 me-1 {{ $user['is_online'] ? 'bg-success' : 'bg-gray-500' }}">
                                                </div>
                                                <span
                                                    class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">{{ $user['last_seen'] }}</span>
                                            </a>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" class="avatar-text avatar-sm"
                                                    data-bs-toggle="dropdown">
                                                    <i class="feather-more-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item favorite-toggle"
                                                            data-user-id="{{ $user['id'] }}">
                                                            <i
                                                                class="feather-star me-3 {{ $user['is_favorite'] ? 'text-warning' : '' }}"></i>
                                                            <span>{{ $user['is_favorite'] ? 'Remove from Favorite' : 'Add to Favorite' }}</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-bell-off me-3"></i>
                                                            <span>Mute Notifications</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-mail me-3"></i>
                                                            <span>Send eMail</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-archive me-3"></i>
                                                            <span>Archive Chat</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p
                                            class="fs-12 {{ $user['unread_count'] > 0 ? 'fw-semibold text-dark' : 'text-muted' }} mt-2 mb-0 text-truncate-2-line">
                                            @if ($user['last_message'])
                                                {{ $user['last_message']['content'] }}
                                            @else
                                                No messages yet. Start a conversation!
                                            @endif
                                        </p>
                                        @if ($user['unread_count'] > 0)
                                            <div class="position-absolute top-0 end-0 mt-4 py-2 me-2">
                                                <span
                                                    class="badge bg-danger rounded-pill">{{ $user['unread_count'] }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @empty
                                <div class="p-4 text-center text-muted">
                                    <i class="feather-users fs-48 mb-3 d-block"></i>
                                    <p>No users available for chat</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <!-- [ Content Sidebar  ] end -->
                <!-- [ Main Area  ] start -->
                <div class="content-area" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-area-header sticky-top" id="chatHeader">
                        <div class="page-header-left hstack gap-4">
                            <a href="javascript:void(0);" class="app-sidebar-open-trigger">
                                <i class="feather-align-left fs-20"></i>
                            </a>
                            <div class="d-flex align-items-center justify-content-center gap-3" id="selectedUserInfo"
                                style="display: none !important;">
                                <div class="avatar-image" id="selectedUserAvatar"></div>
                                <div class="d-none d-sm-block">
                                    <div class="fw-bold d-flex align-items-center" id="selectedUserName"></div>
                                    <div class="d-flex align-items-center mt-1">
                                        <span class="wd-7 ht-7 rounded-circle opacity-75 me-2"
                                            id="selectedUserStatus"></span>
                                        <span class="fs-9 text-uppercase fw-bold" id="selectedUserLastSeen"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-header-right ms-auto" id="chatActions" style="display: none;">
                            <div class="d-flex align-items-center justify-content-center gap-2">
                                <a href="javascript:void(0)" class="d-flex d-none d-sm-block favorite-toggle-btn">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        title="Add to Favorite">
                                        <i class="feather-star"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="ac-info-sidebar-open-trigger">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        title="Profile Info">
                                        <i class="feather-info"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="content-area-body" id="messagesContainer">
                        <div class="text-center p-5" id="welcomeMessage">
                            <i class="feather-message-circle fs-48 text-muted mb-3 d-block"></i>
                            <h5 class="text-muted">Select a user to start chatting</h5>
                            <p class="text-muted">Choose someone from the list to begin your conversation</p>
                        </div>
                        <!-- Messages will be loaded here -->
                    </div>
                    <!--! BEGIN: Message Editor !-->
                    <div class="d-flex align-items-center justify-content-between border-top border-gray-5 bg-white sticky-bottom"
                        id="messageEditor"
                        style="display: none !important;     position: fixed;
    bottom: 0;
    width: 100%;">
                        <div class="d-flex align-center">
                            <div class="dropdown border-end border-gray-5">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <div class="wd-60 d-flex align-items-center justify-content-center"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" title="Emoji"
                                        style="height: 59px"><i class="feather-smile"></i></div>
                                </a>
                            </div>
                            <div class="dropdown border-end border-gray-5">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <div class="wd-60 d-flex align-items-center justify-content-center"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" title="Upload Attachments"
                                        style="height: 59px"><i class="feather-link"></i></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i
                                                class="feather-image me-3"></i>Upload Images</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i
                                                class="feather-file me-3"></i>Upload Documents</a></li>
                                </ul>
                            </div>
                        </div>
                        <input class="form-control border-0" placeholder="Type your message here..." id="messageInput">
                        <div class="border-start border-gray-5 send-message">
                            <a href="javascript:void(0)" class="wd-60 d-flex align-items-center justify-content-center"
                                data-bs-toggle="tooltip" data-bs-trigger="hover" title="Send Message"
                                style="height: 59px" id="sendButton"><i class="feather-send"></i></a>
                        </div>
                    </div>
                    <!--! END: Message Editor !-->
                </div>
                <!-- [ Content Area ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </main>

    <!-- Chat JavaScript -->
    <script>
        // Global chat variables
        let currentUser = @json($currentUser);
        let selectedUserId = null;
        let selectedUserData = null;
        let lastMessageCheck = new Date().toISOString();
        let pollingInterval = null;
        let isPolling = false;

        $(document).ready(function() {
            initializeChat();
        });

        function initializeChat() {
            // Bind user selection
            $(document).on('click', '.user-item', function() {
                const userId = $(this).data('user-id');
                const userName = $(this).data('user-name');
                selectUser(userId, userName, $(this));
            });

            // Bind message sending
            $('#sendButton').on('click', sendMessage);
            $('#messageInput').on('keypress', function(e) {
                if (e.which === 13 && !e.shiftKey) {
                    e.preventDefault();
                    sendMessage();
                }
            });

            // Bind favorite toggle
            $(document).on('click', '.favorite-toggle', function(e) {
                e.stopPropagation();
                const userId = $(this).data('user-id');
                toggleFavorite(userId);
            });

            // Start polling for new messages
            startPolling();
        }

        function selectUser(userId, userName, element) {
            selectedUserId = userId;

            // Update UI
            $('.user-item').removeClass('active');
            element.addClass('active');

            // Show chat header and editor
            $('#selectedUserInfo').show();
            $('#chatActions').show();
            $('#messageEditor').show();
            $('#welcomeMessage').hide();

            // Update selected user info
            const avatar = element.find('.avatar-image img').attr('src') || null;
            const initials = element.find('.avatar-text').text() || userName.charAt(0);
            const isOnline = element.find('.bg-success').length > 0;
            const lastSeen = element.find('.fs-10').text();

            if (avatar) {
                $('#selectedUserAvatar').html(`<img src="${avatar}" class="img-fluid rounded-circle" alt="image">`);
            } else {
                $('#selectedUserAvatar').html(`<div class="bg-primary text-white avatar-text">${initials}</div>`);
            }

            $('#selectedUserName').text(userName);
            $('#selectedUserStatus').removeClass().addClass(
                `wd-7 ht-7 rounded-circle opacity-75 me-2 ${isOnline ? 'bg-success' : 'bg-gray-500'}`);
            $('#selectedUserLastSeen').removeClass().addClass(
                `fs-9 text-uppercase fw-bold ${isOnline ? 'text-success' : 'text-muted'}`).text(isOnline ?
                'Active Now' : lastSeen);

            // Load messages
            loadMessages(userId);
        }

        function loadMessages(userId) {
            $.ajax({
                url: `/api/chat/users/${userId}/messages`,
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        displayMessages(response.messages);
                        selectedUserData = response.conversation_partner;
                    }
                },
                error: function(xhr) {
                    console.error('Failed to load messages:', xhr);
                    showError('Failed to load messages');
                }
            });
        }

        function displayMessages(messages) {
            let html = '';

            messages.forEach(function(message) {
                const isCurrentUser = message.sender.id === currentUser.id;
                const messageClass = isCurrentUser ? 'ms-auto' : '';
                const flexClass = isCurrentUser ? 'flex-row-reverse' : '';

                html += `
                <div class="single-chat-item mb-5">
                    <div class="d-flex ${flexClass} align-items-center gap-3 mb-3">
                        <a href="javascript:void(0)" class="avatar-image">
                            <img src="${message.sender.avatar_url}" class="img-fluid rounded-circle" alt="image">
                        </a>
                        <div class="d-flex ${flexClass} align-items-center gap-2">
                            <a href="javascript:void(0);">${message.sender.name}</a>
                            <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                            <span class="fs-11 text-muted">${message.time}</span>
                        </div>
                    </div>
                    <div class="wd-500 p-3 rounded-5 bg-gray-200 ${messageClass}">
                        <p class="py-2 px-3 rounded-5 bg-white mb-0">${message.formatted_message}</p>
                    </div>
                </div>
            `;
            });

            $('#messagesContainer').html(html || '<div class="text-center p-5 text-muted">No messages yet</div>');
            scrollToBottom();
        }

        function sendMessage() {
            const message = $('#messageInput').val().trim();

            if (!message || !selectedUserId) {
                return;
            }

            // Optimistic UI update - show message immediately
            const tempId = 'temp-' + Date.now();
            const optimisticMessage = {
                id: tempId,
                sender: {
                    id: currentUser.id,
                    name: currentUser.name,
                    avatar_url: currentUser.avatar_url || `assets/images/avatar/${currentUser.avatar_number}.png`
                },
                formatted_message: message.replace(/\n/g, '<br>'),
                time: 'Just now',
                is_sender: true
            };
            
            // Add the message to the UI immediately
            appendMessage(optimisticMessage);
            
            // Clear input field
            $('#messageInput').val('');
            
            $.ajax({
                url: `/api/chat/users/${selectedUserId}/messages`,
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    message: message
                },
                success: function(response) {
                    if (response.success) {
                        // Replace the temporary message with the confirmed one
                        $(`#${tempId}`).remove();
                        appendMessage(response.message);
                        
                        // Update the user list with the new message
                        updateUserLastMessage(selectedUserId, message, 'Just now');
                    }
                },
                error: function(xhr) {
                    console.error('Failed to send message:', xhr);
                    showError('Failed to send message');
                    // Mark the message as failed
                    $(`#${tempId}`).addClass('message-failed');
                }
            });
        }
        
        // Helper function to append a single message to the chat
        function appendMessage(message) {
            const isCurrentUser = message.sender.id === currentUser.id;
            const messageClass = isCurrentUser ? 'ms-auto' : '';
            const flexClass = isCurrentUser ? 'flex-row-reverse' : '';
            
            const html = `
                <div class="single-chat-item mb-5" id="${message.id || ''}">
                    <div class="d-flex ${flexClass} align-items-center gap-3 mb-3">
                        <a href="javascript:void(0)" class="avatar-image">
                            <img src="${message.sender.avatar_url}" class="img-fluid rounded-circle" alt="image">
                        </a>
                        <div class="d-flex ${flexClass} align-items-center gap-2">
                            <a href="javascript:void(0);">${message.sender.name}</a>
                            <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                            <span class="fs-11 text-muted">${message.time}</span>
                        </div>
                    </div>
                    <div class="wd-500 p-3 rounded-5 bg-gray-200 ${messageClass}">
                        <p class="py-2 px-3 rounded-5 bg-white mb-0">${message.formatted_message}</p>
                    </div>
                </div>
            `;
            
            $('#messagesContainer').append(html);
            scrollToBottom();
        }

        function toggleFavorite(userId) {
            $.ajax({
                url: `/api/chat/users/${userId}/favorite`,
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        // Update UI
                        const userItem = $(`.user-item[data-user-id="${userId}"]`);
                        const favoriteIcon = userItem.find('.favorite-toggle .feather-star');
                        const favoriteText = userItem.find('.favorite-toggle span');

                        if (response.data.is_favorite) {
                            favoriteIcon.addClass('text-warning');
                            favoriteText.text('Remove from Favorite');
                            userItem.attr('data-is-favorite', 'true');
                        } else {
                            favoriteIcon.removeClass('text-warning');
                            favoriteText.text('Add to Favorite');
                            userItem.attr('data-is-favorite', 'false');
                        }
                    }
                },
                error: function(xhr) {
                    console.error('Failed to toggle favorite:', xhr);
                    showError('Failed to update favorite');
                }
            });
        }

        function startPolling() {
            if (isPolling) return;

            isPolling = true;
            pollingInterval = setInterval(function() {
                if (document.visibilityState === 'visible') {
                    pollForUpdates();
                }
            }, 2000); // Poll every 2 seconds for better real-time experience
        }

        function stopPolling() {
            if (pollingInterval) {
                clearInterval(pollingInterval);
                pollingInterval = null;
            }
            isPolling = false;
        }

        function pollForUpdates() {
            $.ajax({
                url: '/api/chat/poll',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    last_check: lastMessageCheck,
                    timeout: 25
                },
                success: function(response) {
                    if (response.success && response.has_updates) {
                        lastMessageCheck = response.server_time;

                        // Handle new messages
                        if (response.new_messages.length > 0) {
                            handleNewMessages(response.new_messages);
                        }

                        // Handle user status updates
                        if (response.user_updates.length > 0) {
                            handleUserUpdates(response.user_updates);
                        }
                    }
                    lastMessageCheck = response.server_time;
                },
                error: function(xhr) {
                    console.error('Polling failed:', xhr);
                }
            });
        }

                function handleNewMessages(newMessages) {
            newMessages.forEach(function(message) {
                // If message is from currently selected user, append it directly
                if (selectedUserId && message.conversation_partner_id == selectedUserId) {
                    // Format the message for display
                    const formattedMessage = {
                        id: message.id,
                        sender: {
                            id: message.sender.id,
                            name: message.sender.name,
                            avatar_url: message.sender.avatar_url
                        },
                        formatted_message: message.message.replace(/\n/g, '<br>'),
                        time: message.time,
                        is_sender: false
                    };
                    
                    // Add message to chat
                    appendMessage(formattedMessage);
                    
                    // Play notification sound
                    playNotificationSound();
                    
                    // Mark message as read
                    markAsRead(message.conversation_partner_id);
                }
                
                // Update user list preview and add notification badge
                updateUserWithNewMessage(message.conversation_partner_id, message.message, message.time);
            });
        }
        
        function markAsRead(userId) {
            $.ajax({
                url: `/api/chat/users/${userId}/mark-read`,
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                error: function(xhr) {
                    console.error('Failed to mark messages as read:', xhr);
                }
            });
        }
        
        function playNotificationSound() {
            // You can implement a notification sound here
            // const audio = new Audio('/assets/sounds/notification.mp3');
            // audio.play();
        }

        function handleUserUpdates(userUpdates) {
            userUpdates.forEach(function(update) {
                const userItem = $(`.user-item[data-user-id="${update.id}"]`);
                if (userItem.length) {
                    const statusDot = userItem.find('.wd-5.ht-5');
                    const lastSeenText = userItem.find('.fs-10');

                    if (update.is_online) {
                        statusDot.removeClass('bg-gray-500').addClass('bg-success');
                    } else {
                        statusDot.removeClass('bg-success').addClass('bg-gray-500');
                    }

                    lastSeenText.text(update.last_seen);
                }
            });
        }

        function updateUserLastMessage(userId, message, time) {
            const userItem = $(`.user-item[data-user-id="${userId}"]`);
            if (userItem.length) {
                const messagePreview = userItem.find('.text-truncate-2-line');
                messagePreview.text(message.substring(0, 50) + (message.length > 50 ? '...' : ''));
                
                // Move this user to the top of the list
                const usersList = $('#usersList');
                userItem.detach();
                usersList.prepend(userItem);
            }
        }
        
        function updateUserWithNewMessage(userId, message, time) {
            const userItem = $(`.user-item[data-user-id="${userId}"]`);
            if (userItem.length) {
                // Update message preview
                const messagePreview = userItem.find('.text-truncate-2-line');
                messagePreview.text(message.substring(0, 50) + (message.length > 50 ? '...' : ''));
                messagePreview.addClass('fw-semibold text-dark').removeClass('text-muted');
                
                // Add or update unread badge
                let badgeContainer = userItem.find('.position-absolute.top-0.end-0');
                if (badgeContainer.length === 0) {
                    userItem.find('.item-desc').append(`
                        <div class="position-absolute top-0 end-0 mt-4 py-2 me-2">
                            <span class="badge bg-danger rounded-pill">1</span>
                        </div>
                    `);
                } else {
                    const badge = badgeContainer.find('.badge');
                    const count = parseInt(badge.text()) || 0;
                    badge.text(count + 1);
                }
                
                // Move this user to the top of the list
                const usersList = $('#usersList');
                userItem.detach();
                usersList.prepend(userItem);
            }
        }

        function scrollToBottom() {
            const container = $('#messagesContainer');
            // Use setTimeout to ensure the DOM has updated before scrolling
            setTimeout(() => {
                container.scrollTop(container[0].scrollHeight);
            }, 50);
        }

        function showError(message) {
            // You can implement a toast notification here
            console.error(message);
        }

        // Handle page visibility changes
        document.addEventListener('visibilitychange', function() {
            if (document.visibilityState === 'hidden') {
                stopPolling();
            } else {
                startPolling();
            }
        });
    </script>
@endsection
