import helpers from "./helpers";
import moment from "moment-timezone";
import Axios from "axios";
import Helpers from "./helpers";

class Notify {
    constructor() {
        this.$navBarNotifyNum = $('#nav-bar-notify-num');
        this.$viewAllNotify = $('#view-all-notify');
        this.$notificationContainer = $('#notification_container');
        this.$notifySentence = $('#notify-sentence');
        this.init();
    }

    init() {
        let pusher = new Pusher(this.$navBarNotifyNum.data('app-key'), {
            cluster: this.$navBarNotifyNum.data('app-cluster'),
            encrypted: true
        });

        let channel = pusher.subscribe('notify-channel');

        channel.bind('DG\\Dissertation\\Admin\\Events\\NotifyRegistration', data => {
            let organizer = parseInt(data.event.organizer_id);
            if (organizer === parseInt(this.$notificationContainer.data('o-id'))) {
                let items = this.$notificationContainer.find('a').toArray();
                let num = parseInt(this.$navBarNotifyNum.text());
                if (items.length === 5) {
                    $(items[items.length - 1]).remove();
                    items.pop();
                }
                let html = `<a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                                <p class="font-weight-medium text-dark">
                                    Attendee just register to event now
                                </p>
                                <p class="font-weight-light small-text">
                                    <strong>${data.attendee.firstname} ${data.attendee.lastname}</strong> just register to event <strong>${data.event.name}</strong>
                                </p>
                                <p class="text-muted text-right" style="font-size: 12px!important;">
                                    ${moment(new Date()).tz("Asia/Ho_Chi_Minh").format('D/M/Y HH:mm')}
                                </p>
                            </div>
                        </a>`;
                this.$notificationContainer.html(html);
                this.$notificationContainer.append(items);
                this.$notifySentence.text(`You have ${num + 1} unread notification `);
                this.$navBarNotifyNum.text(num + 1);
            }

        });

        this.$viewAllNotify.click(event => {
            window.location.href = $(event.target).data('url')
        });

        $(document).on('click', '.notification-item', event => {
            let id = $(event.currentTarget).data('id');
            let url = this.$notificationContainer.data('one-url');
            Axios.post(url, {id}).then(
                res => {
                    if (res.data && res.data.message) {
                        Helpers.showToast(res.data.message);
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000)
                    }
                },
                err => {
                    Helpers.showToast(err.response.data.message, 'error');
                }
        )
    }

)
}
}

$(() => {
    new Notify()
});
