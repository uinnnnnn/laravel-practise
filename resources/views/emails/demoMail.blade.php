<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>二手書平台</title>
  </head>

  <body>
    <div width="100%" style="margin: 0; background-color: #f0f2f3;">
      <div
        style="margin: auto; max-width: 600px; padding-top: 50px"
      >
        <table
          role="presentation"
          style="
            background: #252f3d;
            border-radius: 3px 3px 0 0;
            max-width: 600px;
          "
        >
          <tbody>
            <tr>
              <td
                style="
                  background: linear-gradient(
                    45deg,
                    #fefcea 0%,
                    #fff6d9 15%,
                    #ffb744 76%
                  );
                  border-radius: 3px 3px 0 0;
                  padding: 20px 0 10px 0;
                  text-align: center;
                "
              >
                <img
                  src="{{$message->embed(public_path('emails/register.png'))}}"
                  class="logo"
                  alt=""
                />
              </td>
            </tr>
          </tbody>
        </table>

        <table
          role="presentation"
          style="
            border: 0px;
            border-bottom: 1px solid #d6d6d6;
            max-width: 600px;
          "
        >
          <tbody>
            <tr>
              <td
                style="
                  background-color: #fff;
                  color: #444;
                  font-family: 'Amazon Ember', 'Helvetica Neue', Roboto, Arial,
                    sans-serif;
                  font-size: 14px;
                  line-height: 140%;
                  padding: 25px 35px;
                "
              >
                <h1
                  style="
                    font-size: 20px;
                    font-weight: bold;
                    line-height: 1.3;
                    margin: 0 0 15px 0;
                  "
                >
                  歡迎 {username }} 註冊本平台
                </h1>
                <p style="margin: 0; padding: 0">
                  我們欲確定這是您本人所進行的操作。<wbr />請在提示出現後點擊下方處連結，以利啟用此電信箱認證。若您不想建立帳戶，<wbr />則可忽略此訊息。
                  如有任何問題，請隨時與我們聯繫。期待與您共享更多優質服務！
                </p>
                <p style="margin: 0; padding: 0"></p>
              </td>
            </tr>
            <tr>
              <td
                style="
                  background-color: #fff;
                  color: #444;
                  font-family: 'Amazon Ember', 'Helvetica Neue', Roboto, Arial,
                    sans-serif;
                  font-size: 14px;
                  line-height: 140%;
                  padding: 25px 35px;
                  padding-top: 0;
                  text-align: center;
                "
              >
                <div style="font-weight: bold; padding-bottom: 15px">
                  驗證連結: <a href="{{ $url }}">Click here</a>
                </div>
                <div>(此驗證連結於 10 分鐘內有效)</div>
              </td>
            </tr>
            <tr>
              <td
                style="
                  background-color: #fff;
                  border-top: 1px solid #e0e0e0;
                  color: #777;
                  font-family: 'Amazon Ember', 'Helvetica Neue', Roboto, Arial,
                    sans-serif;
                  font-size: 14px;
                  line-height: 140%;
                  padding: 25px 35px;
                "
              >
                <p style="margin: 0 0 15px 0; padding: 0 0 0 0">
                  Second-Hand Book
                  絕不會傳送電子郵件給您，要求您公開或驗證您的密碼
                </p>
              </td>
            </tr>
          </tbody>
        </table>

        <table
          role="presentation"
          style="max-width: 600px"
        >
          <tbody>
            <tr>
              <td
                style="
                  color: #777;
                  font-family: 'Amazon Ember', 'Helvetica Neue', Roboto, Arial,
                    sans-serif;
                  font-size: 12px;
                  line-height: 16px;
                  padding: 20px 30px;
                  text-align: center;
                "
              >
                此訊息由 Second-Hand Book© 2024, Second-Hand Book, Inc.
                保留所有權利。
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
