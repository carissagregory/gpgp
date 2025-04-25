.gameCardContent {
  background-color: $white;
  color: #000;
  padding: 8px;
  margin-top: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-left-radius: 8px;
  border-bottom-right-radius: 8px;
  height: 220px;
  overflow-y: auto;
  padding-top: 0;
}

.gameCardContent p {
  margin-top: 0;
  margin-bottom: 5px;
}

.gameCardTitle {
  color: $darkRed;
  text-align: left;
  font-weight: bold;
  font-size: 1.8rem;
  margin-bottom: 10px;
}

.gameGrid {
  margin: 0;
}

.container {
  max-width: 100%;
}

.gameCardDarkBlue { background-color: $darkBlue; color: $cream; }
.gameCardGold     { background-color: $gold; color: $darkBlue; }
.gameCardDarkRed  { background-color: $darkRed; color: $cream; }
.gameCardLightBlue { background-color: $lightBlue; color: $darkBlue; }
.gameCardCream    { background-color: $cream; color: $darkBlue; }
.gameCardBlack    { background-color: $black; color: $white; }
.gameCardWhite    { background-color: $white; color: $black; }
.gameCardDefault  { background-color: $defaultGray; color: #000; }

.gameCardImage {
  margin: 0;
  padding: 0;
  line-height: 0;
}

.gameCardImage img {
  display: block;
  margin: 0;
  padding: 0;
  vertical-align: bottom;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  max-height: 150px;
  object-fit: cover;
}

.gameCardContent {
  margin-top: 0;
}

.gameCardPlayers span,
.gameCardAge span,
.gameCardTime span,
.gameCardDifficulty span,
.gameCardMeta span,
.gameCardInfo span,
.gameCardGoal span,
.gameCardRules span,
.gameCardOther span,
.gameCardTools span {
  text-transform: uppercase;
  font-size: 0.75rem;
  color: $darkGray;
  letter-spacing: 0.5px;
  font-weight: bold;
  line-height: 1.2;
}

.gameCardMeta p {
  margin: 0 10px 0 0;
}

.gameCardInfo,
.gameCardGoal,
.gameCardRules,
.gameCardOther {
  margin-bottom: 5px;
}

.gameCard {
  border-radius: 8px;
  padding: 10px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%;
  margin: 8px;
}